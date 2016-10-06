## Synopsis

This module it's a extension to connect Magento with Cymbio service. The module send request to API after add product to cart and save details in database.

## Installation

To installation this module copy all files with maintaining property directory structure. Refresh Magento page, logout and login with Magento admin panel and module was installed.

## Implementation

The module contain two general class: Polcode_Cymbio_Model_Api and Polcode_Cymbio_Model_CymbioEvents.
Class Polcode_Cymbio_Model_Api contain methods to prepare data and send request to API.
Class Polcode_Cymbio_Model_CymbioEvents contain methods to save details in cymbio_events table in database.

In Magento admin panel tab: System->Configuration->Cymbio Custom Settings you can set a API Url.

On product page was set second "Add to Cart (Cymbio)" button as specified.

## Estimation time (min, max, avg time in hours)
1. Initiate dedicated repository, open additional Git branch, dump database (2,	3, 2.5)
2. Add a Readme with implementation plan and estimation (1.5, 2, 1.75)
3. Implement backand structure and migratin SQL (3, 4, 3.5)
4. Add custom ‘ADD TO CART’ button to product page (1.5, 2.5, 2)
5. Create model (2.5, 3.5, 3)
6. Event to API (3.5, 5.5, 4.5)
7. Save data in table cymbio_events (2,	3, 2.5)
8. Testing module (1, 1.5, 1.25)
