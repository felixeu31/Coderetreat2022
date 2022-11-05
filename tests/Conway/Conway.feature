Feature: Conway feature

  Scenario: Any live cell with fewer than two live neighbours dies,
  as if caused by underpopulation.
    Given a live cell
    And the cell has "0" neighbours
    When I calculate next generation
    Then the cell is dead