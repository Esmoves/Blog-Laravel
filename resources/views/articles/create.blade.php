@extends ('layouts.layout')

    @section ('content')

                <h1>Create a Post</h1>

                <div id="blogPage">
					 <input type="text" name="usrname" placeholder="title" id="usrInput"> <br />
					 <!--<div id="categoryBoxes">
						<input type="checkbox" id="sportsCheckB" name="subscribe" value="sports">
	    				<label for="subscribeNews">Sports</label>
	    				<input type="checkbox" id="natureCheckB" name="subscribe" value="nature">
	    				<label for="subscribeNews">Nature</label>
	    				<input type="checkbox" id="politicsCheckB" name="subscribe" value="politics">
	    				<label for="subscribeNews">Politics</label>
					 </div>-->
					 <textarea name="comment" form="blogInput" id="blogText" placeholder="Type your article"></textarea>
					 <div id="btnSubBlog" onclick="submitBlog()" align="center">Submit</div>
				</div>

    @endsection
