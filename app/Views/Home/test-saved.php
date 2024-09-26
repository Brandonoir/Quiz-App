<h1>The test <?= $testTitle?> have been saved!</h1>

<div>
    <form action="create-question" method="post" >
        <input type="hidden" value="<?= $testId ?>" name="testId" >
        <input type="hidden" value="<?= $testTitle ?>" name="test-title" >
        <input type="submit" value="Continue">
    </form>
</div>