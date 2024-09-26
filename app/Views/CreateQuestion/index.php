<div class="questionnaire">
    <h1>Create Test Form</h1>
        <div>
            <table>
                <tr>
                    <td><h3>add question</h3></td> 
                    <td><button id="add-question" type="button">+Add</button></td>
                </tr>
            </table>
        </div>
    <form action="get-question" method="post">
        <div class="question">
            <fieldset>
                <legend>Question</legend>
                <table>
                    <tr>
                        <td>
                            <textarea name="question-text" id="" placeholder="question..."></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="answer-type" class="answer-type" required>
                                <option value="" disabled selected>Select answer type</option>
                                <option value="radio">radio</option>
                                <option value="checkbox">checkbox</option>
                                <option value="text">text</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </div>

        <!-- Answers -->
        <div class="a-type radio">
            <fieldset>
                <legend>Radio/Single Answer</legend>
                <table>
                    <tr>
                        <td><input type="radio" name="a1" value="rb-a1" /></td>
                        <td><input type="text"  name="rb-a1"></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="a1" value="rb-a2" /></td>
                        <td><input type="text" name="rb-a2"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="a-type checkbox">
            <fieldset>
                <legend>Checkbox/Multiple Answer</legend>
                <table>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><input type="text"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="a-type textbox">
            <fieldset>
                <legend>Textbox</legend>
                <input type="text" />
            </fieldset>
        </div>
        <input type="submit"  value="Save" />
    </form>
</div>

<script>
    $(document).ready(function(){
        var q_type = '';

        $(".a-type").hide();
        $("form").hide();
        
    $("#add-question").click(function(){
        $("form").show();
    });

  $('select.answer-type').change(function(){
        var selectedType = $(this).children("option:selected").val();
        if(selectedType=='radio'){
            $(".a-type").hide();
            $(".radio").show();
        } else if(selectedType=='checkbox') {
            $(".a-type").hide();
            $(".checkbox").show();
        } else {
            $(".a-type").hide();
            $(".textbox").show();
        }
    });    
});
</script>
