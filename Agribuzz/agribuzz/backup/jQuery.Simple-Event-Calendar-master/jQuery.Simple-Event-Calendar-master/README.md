jQuery.Simple-Event-Calendar
================

jQuery.Simple-Event-Calendar make it easier for you to create an calendar. Check out the demo!


###Install
```html
bower install simpleeventcalendar
```

###Setup
```html
<!-- You'll need jquery -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- and you'll need to include equalheight -->
<script src="simplecalendar.js"></script>

<!-- and you'll need to include style.css -->
<script src="style.css"></script>

<!-- and all you'll need to do is add some divs for event-->
<div class="day-event" date-month="2" date-day="16" date-year="2016" data-number="1">
<a href="#" class="close fontawesome-remove"></a>
<h2 class="title">Lorem ipsum 3</h2>
<span class="date">2014-12-16</span>
<p>Lorem Ipsum är en utfyllnadstext från tryck- och förlagsindustrin. Lorem ipsum har varit standard ända sedan 1500-talet, när en okänd boksättare tog att antal bokstäver och blandade dem för att göra ett provexemplar av en bok.</p>
<button class="read-more">Read more</button>
</div>
```

###Load from json
```javascript
"events": [{
  "month": "2",
  "day": "12",
  "year": "2016",
  "title": "Lorem ipsum",
  "description": "Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam."
  }]
}
```


###Personal list
![alt tag](http://oi62.tinypic.com/dmbq86.jpg)

###JSON example
![alt tag](http://oi68.tinypic.com/4pwqo9.jpg)

###Updates
* Load events from external json file
* YEAR SUPPORT
* Add custom classes to each event
* List days automatically based on month
* Change month
* Personal list with print function
* Auto add '.event' class to all days that has an event
* Uncheck calender '.day-event' checkbox when removing event from personal list
* Sort personal list based on date
* Problem when there was more then one event on same day data-number="1"
