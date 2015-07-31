$(function() {
    $('.skill').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('highlight');
        $('div.experience').removeClass('highlighted');
        $('.skill.highlight').each(function(){
            var skill = $(this).attr('data-tag');
            $("div.experience[data-tags~='tag-" + skill + "']").addClass('highlighted');
        });
        if($('.skill.highlight').length){
            $('div.experience.highlighted').show();
            $('div.experience:not(.highlighted)').hide();
        } else {
            $('div.experience').show();
        }
    });
    $('form.delete').submit(function(){
        return confirm('Are you sure you want to delete this item?');
    });
});
