@extends('layouts.app')

@section('content')


<style>

  .header {
  padding: 40px;
  text-align: center;
   background: #eee;
  color: #262626;
  font-size: 17px;
  font-family:  sans-serif;
}




* {
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background: #990033;
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background: #002699;
}

.card3 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background: #cc8800;
}

.card4 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background: #999900;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

</style>

<div class="header">
    <h1>Information About The Rookery</h1>
  <p>Set in central London's fashionable Clerkenwell area, The Rookery offers charming rooms with elegant period furnishings and free WiFi. Only 100 m from Farringdon Railway Station, the small hotel is also just 5 minutes' walk from Barbican Tube Station.
  With sumptuous antique furniture and artwork, each individually styled and air-conditioned room offers a flat-screen LCD TV. The luxury en-suite bathrooms boast REN toiletries and a hairdryer.

In the mornings, guests at The Rookery can enjoy breakfast in the elegant conservatory or served to the privacy of the room. Breakfast includes freshly baked croissants. For lunch and evening meals, there is a wide range of restaurants and bars in the immediate area.

Set within a row of 18th-century houses, The Rookery still retains many original features. Guests can relax in the library or in front of an open fire in the oak-panelled lounge. By Smithfield Market and on the outskirts of London's financial Square Mile, The Rookery is just over 1.6 km from South Bank’s Tate Modern gallery. Impressive St. Paul's Cathedral is only half a kilometer away.

This is our guests' favourite part of London, according to independent reviews.

This property also has one of the best-rated locations in London! Guests are happier about it compared to other properties in the area.

Couples particularly like the location — they rated it 9.4 for a two-person trip.

This property is also rated for the best value in London! Guests are getting more for their money when compared to other properties in this city.

We speak your language!</p>
</div>

<br>


<div class="row">
  <div class="column">
      <div class="card1"><h1>Room service</h1></div>
  </div>
  <div class="column">
      <div class="card2"> <h1>Laundry</h1></div>
  </div>
  <div class="column">
      <div class="card3"><h1>Bar</h1></div>
  </div>
  <div class="column">
      <div class="card4"><h1>Free WiFi</h1></div>
  </div>
</div>

@endsection
