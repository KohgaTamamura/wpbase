<div class="row">
<div class="c12 columns">
  <h2 >Tab</h2>

<div class="tabs">

    <ul class="tab-nav">
        <li class="active"><a href="#">Tab 1</a></li>
        <li><a href="#">Tab 2</a></li>
        <li><a href="#">Tab 3</a></li>
    </ul>

    <div class="tab-panels">
        <div class="tab-panel active">
            <h3>Contents 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
        </div>

        <div class="tab-panel">
            <h3>Contents 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
        </div>

        <div class="tab-panel">
            <h3>Contents 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis felis lectus, eu molestie metus dictum in. Morbi a nulla id orci vehicula viverra. Aenean arcu nulla, convallis et quam vitae, vestibulum tempor lorem.</p>
        </div>

    </div>

</div>



</div>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/cmn/js/vendar/tabs.js"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        $('.tabs').set_tabs();
    });
</script>