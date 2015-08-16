$(function() {

    $('.date-select').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    }).on('changeDate', function(){
        $('.datepicker').hide();
    });

    $('form[data-confirm]').submit(function() {
        if ( !confirm($(this).attr('data-confirm'))) {
            return false;
        }
    });

    //Manual Sorting of images
    $('.move-up').on('click', function() {
        var     currentEl = $(this).closest('.draggable'),
                   prevEl = currentEl.prev(),
                   currentSortOrderEl = currentEl.find('.sort-order'),
                   currentSortOrderVal = parseInt(currentSortOrderEl.val()),
                   prevSortOrderEl = currentEl.prev().find('.sort-order'),
                   prevSortOrderVal = parseInt(prevSortOrderEl.val());

        currentEl.insertBefore(prevEl).fadeIn();

        if (currentSortOrderVal != 1) {
            currentSortOrderEl.val(currentSortOrderVal - 1);
        }
        prevSortOrderEl.val(prevSortOrderVal + 1);

        $('.button').removeClass('inactive').addClass('active');
    });

    $('.move-down').on('click', function() {
        var     currentEl = $(this).closest('.draggable'),
                   nextEl = currentEl.next(),
                   currentSortOrderEl = currentEl.find('.sort-order'),
                   currentSortOrderVal = parseInt(currentSortOrderEl.val()),
                   nextSortOrderEl = currentEl.next().find('.sort-order'),
                   nextSortOrderVal = parseInt(nextSortOrderEl.val());

        currentEl.insertAfter(nextEl).fadeIn(300);

        currentSortOrderEl.val(currentSortOrderVal + 1);
        nextSortOrderEl.val(nextSortOrderVal - 1);

        $('.button').removeClass('inactive').addClass('active');
    });

    //Handling Draggable Sorting
    var dragSrcEl = null;

    function handleDragStart(e) {
        this.classList.add('dragging');


        dragSrcEl = this;

        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/html', this.innerHTML);
    }

    function handleDragOver(e) {
        if (e.preventDefault) {
            e.preventDefault();
        }

        e.dataTransfer.dropEffect = 'move';

        return false;
    }

    function handleDragEnter(e) {
        this.classList.add('drag-over');
    }

    function handleDragLeave(e) {
        this.classList.remove('drag-over');
    }

    function handleDrop(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        }

        if (dragSrcEl != this) {
            // Set the source column's HTML to the HTML of the column we dropped on.
            dragSrcEl.innerHTML = this.innerHTML;
            this.innerHTML = e.dataTransfer.getData('text/html');

            [].forEach.call(cols, function (col) {

                ///turn off classes
                col.classList.remove('drag-over');
                col.classList.remove('dragging');

                //get new index of each list item and change value
                var indexValue = getIndex(col);
                var sortOrderVal = col.getElementsByClassName('sort-order')[0];
                sortOrderVal.value = indexValue;
            });

            //Get index of current item
            function getIndex(sender)
            {
                var aElements = sender.parentNode.parentNode.getElementsByTagName("li");
                var aElementsLength = aElements.length;
                var index;
                for (var i = 0; i < aElementsLength; i++)
                {
                    if (aElements[i] == sender) //this condition is never true
                    {
                        index = i;
                        return index + 1;
                    }
                }
            }

            button.classList.remove('inactive');
            button.classList.add('active');

            e.preventDefault();

        }

        return false;
    }

    function handleDragEnd(e) {
        [].forEach.call(cols, function (col) {
            col.classList.remove('drag-over');
            col.classList.remove('dragging');
        });
        return false;
    }

    var button = document.getElementById('submit');
    var cols = document.querySelectorAll('.draggable');
    [].forEach.call(cols, function(col) {
        col.addEventListener('dragstart', handleDragStart, false);
        col.addEventListener('dragenter', handleDragEnter, false);
        col.addEventListener('dragover', handleDragOver, false);
        col.addEventListener('dragleave', handleDragLeave, false);
        col.addEventListener('dragend', handleDragEnd, false);
        col.addEventListener('drop', handleDrop, false);
    });


    var $previews = $('[data-preview]');

    $previews.each(function(index, $preview) {
        var $el = $($preview);
        $el.on('click', function(e) {

            var sourceId = $el.data('preview');
            var $source = $('#' + sourceId);
            var markdownText = $source.val();
            var $target = $($el.attr('href'));

            $target.html('<p>...loading preview</p>');

            var xhr = $.post('/markdown', {
                text: markdownText
            })
            .done(function(text) {
                $target.html(text);
            });
        });
    });

    function readUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    var $fileInput = $('input[type="file"]');
    $fileInput.on('change', function(e) {
        readUrl(this);
    });

});
