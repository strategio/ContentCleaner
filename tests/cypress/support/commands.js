// ***********************************************
// This example commands.js shows you how to
// create various custom commands and overwrite
// existing commands.
//
// For more comprehensive examples of custom
// commands please read more here:
// https://on.cypress.io/custom-commands
// ***********************************************
//

Cypress.Commands.add("login", (user) => {
	cy.visit('/wp-login.php')
	cy.wait(500)
	cy.get('#user_login').type(user.login)
	cy.get('#user_pass').type(user.password)
	cy.get('#wp-submit').click()
})

Cypress.Commands.add("loadDump", (dumpName) => {
	const dumps = Cypress.env('dumps')
	cy.exec('wp db import ' + dumps[dumpName])
})
