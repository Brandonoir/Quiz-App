    <div class="dashboard">
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
                    <input type="submit" value="save" id="savebtn"/>
                </form>
            </fieldset>
        </div>

        <div class="test-list">
            <?php foreach ($tests as $test) : ?>
                <div class="test">
                    <h2><?= $test['test_title'] ?></h2>
                    <p><?= $test['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

    
    <script>
        $(document).ready(function(){
            $(".test-info").hide();
        
            $("#create-test").click(function(){
                $(".test-info").show();
                $(".test-list").css("height", "39vh");
            });
        });
    </script>
