<div class="questionnaire">
    <h1><?= $testTitle ?> Form</h1>
        <div>
            <table>
                <tr>
                    <td><h3>add question</h3></td> 
                    <td><button id="add-question" type="button">+Add</button></td>
                </tr>
            </table>
        </div>
    <form action="save-question" method="post">
        <input type="hidden" name="testTitle" value="<?= $testTitle ?>">
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
                        <td><input type="radio" name="a1" value="" id="rb-a1"/></td>
                        <td><input type="text"  name="rb-a1" oninput="document.getElementById('rb-a1').value = this.value;"></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="a1" value="" id="rb-a2"/></td>
                        <td><input type="text" name="rb-a2" oninput="document.getElementById('rb-a2').value = this.value;"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="a-type checkbox">
            <fieldset>
                <legend>Checkbox/Multiple Answer</legend>
                <table>
                    <tr>
                        <td><input type="checkbox" value="" id="cb-1"></td>
                        <td><input type="text" name="cba-1" oninput="document.getElementById('cb-1').value = this.value;"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="" id="cb-2"></td>
                        <td><input type="text" name="cba-2" oninput="document.getElementById('cb-2').value = this.value;"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" value="" id="cb-3"></td>
                        <td><input type="text" name="cba-3" oninput="document.getElementById('cb-3').value = this.value;"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div class="a-type textbox">
            <fieldset>
                <legend>Textbox</legend>
                <input type="hidden" id="tb-answer" value=""/>
                <input type="text" name="answer-text" oninput="document.getElementById('tb-answer').value = this.value;"/>
            </fieldset>
        </div>

        <input type="hidden"  value="<?= $testId ?>" name="testId" />
        <input type="submit"  value="Save" />
    </form>
</div>

<script>
$(document).ready(function(){

    $(".a-type").hide();
    $("form").hide();

    $("#add-question").click(function(){
        $("form").show();
    });

    $('select.answer-type').change(function(){
        var selectedType = $(this).children("option:selected").val();
        $(".a-type").hide();

        if(selectedType == 'radio'){
            $(".radio").show();
            $(".radio input[type='text']").attr('name', 'answer[]');
            $(".radio input[type='radio']").attr('name', 'correct_answer');
            $(".checkbox input[type='text'], .checkbox input[type='checkbox'], .textbox input[type='text']").removeAttr('name');
        } else if(selectedType == 'checkbox') {
            $(".checkbox").show();
            $(".checkbox input[type='text']").attr('name', 'answer[]');
            $(".checkbox input[type='checkbox']").attr('name', 'correct_answer[]');
            $(".radio input[type='text'], .radio input[type='radio'], .textbox input[type='text']").removeAttr('name');
        } else {
            $(".textbox").show();
            $(".textbox input[type='text']").attr('name', 'answer[]');
            $(".textbox input[type='hidden']").attr('name', 'correct_answer[]');
            $(".radio input[type='text'], .radio input[type='radio'], .checkbox input[type='text'], .checkbox input[type='checkbox']").removeAttr('name');
        }
    });
});
</script>
