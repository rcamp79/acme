/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

const $ = require('jquery');


$(document).ready(function (){


    var $cardsCollectionHolder = $('ul.cards');
    var  $collectionHolder = $('ul.cards');

    $collectionHolder.find('li').each(function() {
        addTagFormDeleteLink($(this));
    });

    $cardsCollectionHolder.data('index', $cardsCollectionHolder.find('input').length);

    $('body').on('click', '.add_item_link', function(e) {
        e.preventDefault();
        var $collectionHolderClass = $(e.currentTarget).data('collectionHolderClass');

        addFormToCollection($collectionHolderClass);
    })

    function addFormToCollection($collectionHolderClass) {

        var $collectionHolder = $('.' + $collectionHolderClass);


        var prototype = $collectionHolder.data('prototype');


        var index = $collectionHolder.data('index');

        var newForm = prototype;

        newForm = newForm.replace(/__name__/g, index);


        $collectionHolder.data('index', index + 1);


        var $newFormLi = $('<li class="row new card_form"></li>').append(newForm);

        $collectionHolder.append($newFormLi);

        addTagFormDeleteLink($newFormLi);

    }

    function addTagFormDeleteLink($tagFormLi) {
        var $removeFormButton = $('<button class="btn btn-danger" type="button">Delete this card</button>');
        $tagFormLi.append($removeFormButton);

        $removeFormButton.on('click', function(e) {
            e.preventDefault();

            $tagFormLi.remove();
        });
    }


});





//Add new forms

//Remove forms

