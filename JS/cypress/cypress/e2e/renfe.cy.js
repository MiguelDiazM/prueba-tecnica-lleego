describe('template spec', () => {
  it('passes', () => {
    cy.visit('https://www.renfe.com/es/es')
    cy.get('#onetrust-accept-btn-handler').click();
    cy.contains("Selecciona tu origen").type("Madrid")
    cy.contains("MADRID (TODAS)").click();
    
    
    
    cy.get('#destination').type('ZAMBRANO', { delay: 100 });
    cy.contains("ZAMBRANO").click();

    cy.get('#first-input').invoke('val', "2025-04-28").trigger('input');

    cy.get('#second-input').invoke('val', "2025-04-30").trigger('input');

    cy.get('#passengersSelection').click()
    cy.get('[aria-label="añadir pasajero adulto"] > .rf-passengers-alternative__btn-ico').click()
    cy.get("div.mdc-button__touch.sc-rf-button").last().click()

    cy.contains("Buscar billete").click()


  })
})