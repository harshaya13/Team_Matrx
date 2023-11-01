




<!DOCTYPE html>
<html>
<head>
    <style>
		head
{
	background-color: aliceblue;
}
#name{
	width:200px;
	height: 200px;
	text-align: justify;
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
	background-color: aliceblue;
}

.horizontal-block 
{
    padding: 20px;
    border: 1px solid #ccc;
    text-align: right;
    background-color: #f1f1f1;
}
.horizontal-block h2,p
{
	margin-bottom: 0px;
	margin-top: 0px;
}
.vertical-blocks h2,p{
	margin-bottom: 0px;
	margin-top: 0px;
}

.vertical-blocks {
    display: flex;
    justify-content: space-between;
	height: 350px;
}

.vertical-block {
    flex: 1;
    padding: 20px;
    border: 1px solid #ccc;
}

/* Middle block is larger by default */
.vertical-block:nth-child(3)
{
	flex: 0.5;
}
.vertical-block:nth-child(2) {
    flex: 3;
}
.vertical-block:nth-child(3) ul
{
	list-style-type: none;
	text-align:right;
	width:20px;
}
.vertical-block:nth-child(3) a
{
	text-decoration: none;
}

h2 {
    font-size: 1.5rem;
}

p {
    font-size: 1rem;
}
.editable-paragraph {
    border: 1px solid #ccc;
    padding: 10px;
    min-height: 100px;
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    outline: none; /* Remove the blue outline when focused */
	background-color: white;
}

.editable-paragraph:focus {
    border: 1px solid #007BFF; /* Apply a different border color when focused */
}
.image-container {
    display: flex;
    align-items: center;
    gap: 20px; /* Adjust the gap between elements as needed */
}

.large-image {
    max-width: 300px; /* Adjust the max-width to make the image larger */
    height: auto; /* Preserve the image's aspect ratio */
}

.text-boxes {
    display: flex;
    flex-direction: column;
    gap: 10px; /* Adjust the gap between text boxes as needed */
}

textarea {
    width: 100%; /* Expand to the full width of the container */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-family: Arial, sans-serif; /* Set the font-family for the text boxes */
    font-size: 16px; /* Set the font size for the text boxes */
    line-height: 1.5; /* Set the line height for a paragraph-like appearance */
}
.vertical-block:nth-child(2) p
{
	font-size: 20px;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
	margin-bottom: 10px;
	background-color: white;
	
}
	</style>
</head>
<body>
    <div class="horizontal-block">
		<h2>login details</h2>
        <p>user details</p>
		<div style="position: left;">
		<?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="my_image">Choose an image:</label>
        <input type="file" name="my_image" id="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>
		</div>
    </div>
    <div class="vertical-blocks">
        <div class="vertical-block">
			<h2><u>notes</u></h2>
			<div contenteditable="true" id="editable-paragraph" class="editable-paragraph">
    Hi, Have a good day!
</div>
</div>
        <div class="vertical-block">
			<div class="image-container">
				<img src="C:\Users\Acer\OneDrive\Desktop\Question.png" alt="Image Description" style="width: 500px; height: 150px;">
				<div class="text-boxes">
				<p>this should be a output of the text</p>
				<p>Kancheepuram</p>
					</div>
				</div>
        </div>
	<div class="vertical-block">
		<ul>
			<li>January</li>
			<li>February</li>
			<li>March</li>
			<li>April</li>
			<li>May</li>
		</ul>
	</div>
</div>
</body>
</html>