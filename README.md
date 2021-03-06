# Women in Computing Website
### Last Edit: 02/19/2015
##### Originally Created By: Ashley Herbertson and Andrea Sassu

##How to Publish
Make a local repo:
```
    git clone https://github.com/CUWiC/Website.git
```

Pushing to Github and Publishing on cuwic.github.io/Website:
```
    git add -A
    git commit -m "Commit message"
    git push origin master
    git checkout gh-pages
    git rebase master
    git push origin gh-pages
    git checkout master
```

##Guide to Updating

###Adding Events to Events Page

To manually add an event to the *events.html* page, add the following code to it's corresponding section (either upcoming or past events). The code is the same for both sections. This way, you can simply cut the event information from Upcoming Events to Past Events.

```HTML
<div class="new-event">
	<h2>EVENT NAME</h2>
	<p><span class="bold">Time:</span> Thursday, October 9th, 2014: 10:00am-12:00pm</p>
	<p><span class="bold">Location:</span> ECOT 831</p>
	<p>I am a description!</p>
	<!--Optional Image (commented out by default)
		<p><img src="images/events/Orgfair_small.jpg" alt="Organization Fair"></p>
	-->
</div>
```

###Changing the Banner Image

The banner image is determined within the style.css file. It is a background image set to cover the entire banner size (determined in the same spot). This means that your banner image can be whatever size you wish, but smaller images will become pixilated if the quality isn't high enough. To edit this, find the *main-image* class in *style.css*:
```CSS
#main-image{
	width: 100%;
	height: 400px;
	background: url(/images/engineering-center2.jpg); 
	background-position: 50% 50%;
	background-size: cover;

}
```

###Adding Officers

The officer slider follows the following format. To add a new officer, copy the entire section of code and replace the correct information on *index.html*:

Note: the officer image sizes are currently 300x300px. Descriptions should be less than 370 characters long.

```HTML
<span><img src="images/officers/NAME.jpg" alt="image02">
	<div class="staff-info">
		<h3>FIRSTNAME LASTNAME</h3>
		<h4>ROLE</h4>
		<p class="email">E-Mail: <a href="#">EMAIL</a></p>
		<p class="staff-description">DESCRIPTION</p>
	</div> 
</span>
```


##Additional Notes

###Google Calendar & Facebook Plugins on Main Page

The Events section on the main page is solely made up of the iframe plugins designed by Google and Facebook, respectively. Some browsers allow for plugins that will automatically block iframes from loading, leaving a blank square. This may also happen if the plugin is down on the host website. There is no way around this, but it's something to be aware of.