<h1>Admin dashboard</h1>

<div>
        <input id="create-test" type="Submit" value="Create a Test" />
</div>
<div class="test-info">
 <!-- input test information -->
  <fieldset>
    <legend>Enter Test Information</legend>
    <form action="save-test" method="post">
        <input name="test-title" type="text" placeholder="Test title...">
        <input name="test-description" type="text" placeholder="Test Description...">
        <input type="submit" value="save" />
    </form>
  </fieldset>
</div>

<div>
    <!-- dsplay tests -->
</div>

<script>
    $(document).ready(function(){
        $(".test-info").hide();
    
        $("#create-test").click(function(){
            $(".test-info").show();
        });
    });
</script>