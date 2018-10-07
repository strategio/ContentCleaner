context('Actions', () => {
	beforeEach( () => {
		cy.loadDump('before')
	})

	it('creates a post and displays it', () => {
		const title = 'Hey!'
		const content = 'Hi! This is the content.'

		const adminUser = Cypress.env('adminUser')
		cy.login(adminUser);

		const postLink = addANewPost(title, content)

		postLink.then( postURL => {
			checkPostOnFrontend(postURL, title, content)
		})
	})

	it('creates a post and displays it filtered with ContentCleaner', () => {
		const title = 'Hey!'
		const content = 'Hi! This is the content.'
		const expectedContent = 'Howdy! This is the content.'

		cy.exec('wp plugin activate ContentCleaner' )

		const adminUser = Cypress.env('adminUser')
		cy.login(adminUser);

		const postLink = addANewPost(title, content)

		postLink.then( postURL => {
			checkPostOnFrontend(postURL, title, expectedContent)
		})
	})

	function addANewPost(title, content) {
		cy.get('#wp-admin-bar-new-content').click()
		cy.get('#title').type(title)
		cy.get('#content-html').click()
		cy.get('#content').type(content)
		cy.wait(500)
		cy.get('#publish').click()
		return cy.get('#sample-permalink > a').invoke('attr', 'href').then( href => {
			return href;
		})
	}

	function checkPostOnFrontend(postURL, title, content) {
		cy.visit(postURL)
		cy.get('.entry-title').should('contain', title)
		cy.get('.entry-content').should('contain', content)
	}
})
