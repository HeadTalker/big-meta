$(document).ready(function() {
  jQuery('#most-popular-tags-table').DataTable({
    "aaSorting": [],
    "oLanguage": {
      "sInfo": 'Showing _START_ to _END_ of _TOTAL_ Meta Tags.',
      "sInfoEmpty": 'No Meta Tags yet.',
      "sInfoFiltered": 'filtered from _MAX_ total Meta Tags',
      "sZeroRecords": 'No Meta Tags Found',
      "sLengthMenu": 'Show _MENU_ Meta Tags',
      "sEmptyTable": "No Meta Tags found currently.",
    }
  });
});

$(document).ready(function() {
  jQuery('#most-popular-values-table').DataTable({
    "aaSorting": [],
    "oLanguage": {
      "sInfo": 'Showing _START_ to _END_ of _TOTAL_ Meta Values.',
      "sInfoEmpty": 'No Meta Values yet.',
      "sInfoFiltered": 'filtered from _MAX_ total Meta Values',
      "sZeroRecords": 'No Meta Values Found',
      "sLengthMenu": 'Show _MENU_ Meta Values',
      "sEmptyTable": "No Meta Values found currently.",
    }
  });
});

$(document).ready(function() {
  jQuery('#most-popular-viewports-table').DataTable({
    "aaSorting": [],
    "oLanguage": {
      "sInfo": 'Showing _START_ to _END_ of _TOTAL_ Viewports.',
      "sInfoEmpty": 'No Viewports yet.',
      "sInfoFiltered": 'filtered from _MAX_ total Viewports',
      "sZeroRecords": 'No Viewports Found',
      "sLengthMenu": 'Show _MENU_ Viewports',
      "sEmptyTable": "No Viewports found currently.",
    }
  });
});

$(document).ready(function() {
  jQuery('#most-popular-generators-table').DataTable({
    "aaSorting": [],
    "oLanguage": {
      "sInfo": 'Showing _START_ to _END_ of _TOTAL_ Generators.',
      "sInfoEmpty": 'No Generators yet.',
      "sInfoFiltered": 'filtered from _MAX_ total Generators',
      "sZeroRecords": 'No Generators Found',
      "sLengthMenu": 'Show _MENU_ Generators',
      "sEmptyTable": "No Generators found currently.",
    }
  });
});
