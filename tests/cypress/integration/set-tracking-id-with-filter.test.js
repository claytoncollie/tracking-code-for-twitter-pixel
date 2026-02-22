describe("Set tracking ID with PHP filter", () => {
  before(() => {
    cy.login();
    cy.activatePlugin("filter");
  });

  it("Is input field disabled?", () => {
    cy.visit("/wp-admin/options-general.php");
    cy.get("#tracking_code_for_twitter_pixel").should("be.disabled");
  });

  it("Does input field contain the filtered value?", () => {
    cy.visit("/wp-admin/options-general.php");
    cy.get("#tracking_code_for_twitter_pixel")
      .invoke("val")
      .should("eq", "filter");
  });

  it("Is tracking code printed to the head?", () => {
    cy.logout();
    cy.visit("/");
    cy.document().then((doc) => {
      const html = doc.documentElement.innerHTML;
      expect(html).to.contain("twq('init','filter')");
    });
  });

  after(() => {
    cy.login();
    cy.deactivatePlugin("filter");
  });
});
