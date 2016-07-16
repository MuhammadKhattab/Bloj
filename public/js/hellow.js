$(document).ready( function() {
  // flash message
  $('div.alert').not('.alert-important').delay(3000).slideUp(300);

  // contact view
  $('.anim-text').animate({marginLeft: "20px"}, 1500);

  // tags
  $('select').select2( {
    placeholder: "Choose a tag",
    tags:true
  });

  // drag and drop
  $( function() {
    $( "#draggable" ).draggable();
    
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
});
