<form action="../includes/CI_activity.inc.php" method="POST">

    <label for="type">Activity Category:</label>
    <select name="type" id="type">
        <option value="internal">Internal</option>
        <option value="external">external</option>
        <option value="sponsored">CIO Sponsored</option>
    </select><br>

    <label for="title">Enter Activity Title</label>
    <input type="text" name="title" id="title"><br>

    <label for="date">Enter Activity Date</label>
    <input type="date" name="date" id="date"><br>

    <label for="venue">Enter Activity Venue</label>
    <input type="text" name="venue" id="venue"><br>

    <label for="duration">Enter Activity Duration</label>
    <input type="text" name="duration" id="duration"><br>

    <label for="description">Enter Activity Description</label>
    <input type="text" name="description" id="description"><br>

    <label for="maxPoints">Enter Activity CI Points Max Value</label>
    <input type="number" name="maxPoints" id="maxPoints"><br>

    <button type="submit" name="submit">Submit</button>

</form>