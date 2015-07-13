PubMed Field provides a simple field to automatically import and display scientific publication from the PubMed Database.

How it works
------------
- Attach PubMed Field to any of your node types.
- PubMed Field provides a simple text field where you can put in a PubMed search term. Those terms are the same as on the PubMed website and you can use the PubMed Search Builder to build those terms.
- After saving, PubMed Field will automatically fetch search results from the PubMed database and cache them in your drupal installation. The formatter will display the result list as links including title, publication date and journal.
- You can check the Autoupdate option if you want the field to be update using Drupal's Cron tasks.

Theming Information
-------------------
The module provide a theme hook called pubmed_field-list and a default implementation within the file pubmed_field-list.tpl.php. So if you want to customize the output, just copy the file into your theme and change it.

Cron
---
For the Autoupdate feature this module uses Drupal's standard cron task. It also supports Elysia Cron with a default execution period of once a day.

Search Result Limit
-------------------
There is a default search result limitation of 100 results per field. There is a Drupal variable for this setting (pubmed_field_limit_results) but no user interface to change it yet.

Credits
-------
Parts of this plugin are based on the EntrezClient of the no longer maintained project Entrez. A lot of thanks and credits to those guys!