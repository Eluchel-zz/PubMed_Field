<?php
/**
 * @file
 * Template file for pubmed_field_list
 *
 * $publications is an array of publications. Each $publication in $publications
 * contains:
 * $publication->pubmedid: the PubMed ID
 * $publication->title: the publication title
 * $publication->date_published: the publication date formated
 * $publication->pubmed_url: the url to the publication on www.ncbi.nlm.nih.gov
 */
?>
<div class="publications">
  <ul>
    <?php foreach ($publications as $publication): ?>
      <li>
        <a class="publication-link" target="_blank" href="<?php print $publication->pubmed_url; ?>"><?php print $publication->title; ?></a>
        <span class="publication-journal"><?php print $publication->journal; ?></span>
        <span class="publication-date"><?php print $publication->date_published; ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
