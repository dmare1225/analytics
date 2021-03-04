<?php
/**
 * ANALYTICS PAGE
 * Main analytics page.
 */
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Analytics</h1>
    <table class="wp-list-table widefat fixed striped table-view-list analytics">
        <thead>
            <tr>
                <!-- <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td> -->
                <th id="title" class="manage-column column-title" scope="col">Title</th>
                <th id="url" class="manage-column column-url" scope="col">URL</th>
                <th id="number-of-visitors" class="manage-column column-number-of-visitors" scope="col">Number of Visitors</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="title column-title" data-colname="Title">Hello</td>
                <td class="url column-url" data-colname="URL">/url/goes/here</td>
                <td class="number-of-visitors column-number-of-visitors" data-colname="Number of Visitors">100</td>
            </tr>
        </tbody>
    </table>
</div>