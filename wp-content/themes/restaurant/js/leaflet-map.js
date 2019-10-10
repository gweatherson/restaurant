let mymap = L.map('mapid').setView([39.523,-119.816], 18);

L.tileLayer('https://api.mapbox.com/styles/v1/blkedy/ck1isunlw0akl1dl3iiq3wpgq/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYmxrZWR5IiwiYSI6ImNqOG9ydXNvZzA3ZW0zMHVtaTY4c3Jwb2UifQ.z5zJKkmtTRUIUaH0Lnwb4A', {
  maxZoom: 40,
  attribution: '',
  id: 'mapbox.streets'
}).addTo(mymap);
