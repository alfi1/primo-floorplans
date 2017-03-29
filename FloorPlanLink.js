// Add a link to the appropriate floorplan
// Tim Graves.  University of Sussex Library. 08/03/2017
// With welcome assistance from Ron Gilmour, Ithaca College Library

// This version changes the wording 'Where is it shelved?' || 'Where would it be shelved?' depending on whether the item is available or not


var app = angular.module('viewCustom', ['angularLoad']);

app.component('prmSearchResultAvailabilityLineAfter', {
     bindings: { parentCtrl: '<' },
     controller: 'FloorplanController',
     //template: '<br><div ng-show="$ctrl.getLocation()"><a href="http://users.sussex.ac.uk/~alfi1/floorplans2017/librarymap.php?location={{$ctrl.getClassmark() | lowercase | nospace |limitTo:3:1}}&sequence={{$ctrl.getLocation()}}">{{$ctrl.getAvailability()}}</a></div>'
	
// Open the floorplan in a new tab
// And append a human readable version of the classmark
	 template: '<br><div ng-show="$ctrl.getLocation()"><a target="_blank" href="http://users.sussex.ac.uk/~alfi1/floorplans2017/librarymap.php?location={{$ctrl.getClassmark() | lowercase | nospace |limitTo:3:1}}&sequence={{$ctrl.getLocation()}}&classmark={{$ctrl.getClassmark()}}">{{$ctrl.getAvailability()}}</a></div>'
});

app.controller('FloorplanController', function ($scope, $http) {

     var vm = this;

	 // Uncomment if you want to browse the object's contents
     //  console.log(this);

// The function to getLocation can be removed once the Core collection has been moved in 2017
// At this point it can be commented/removed in this code and the PHP floorplan page to save on
// how many processes need to be executed.
// Once the Core collection is shelved along with everything else the URL does not need to pass MAIN/SHORT/CORE
 	   
     vm.getLocation = getLocation;

     function getLocation($scope) {

          var sequence = "";

          try {
               sequence = vm.parentCtrl.result.pnx.delivery.bestlocation.subLocationCode;
          } catch(e) {
               sequence = "";
          }

// Only display the floorplan link if the item is in an appropriate sequence
// North Basement
// maybe journals need adding too??
//JOURNALS
// Although 'North basement' is included in the sequence name
// perhaps also Docs
// OFFPUB


// The proper line below:
//         if (sequence !== "") {

          if (sequence == "MAIN" || sequence == "SHORT" || sequence == "CORE") {
               return sequence;
          } else {
               return false;
          }
     }
      

     vm.getClassmark = getClassmark;

     function getClassmark($scope) {

          var classmark = "";

          try {
               classmark = vm.parentCtrl.result.pnx.delivery.bestlocation.callNumber;
          } catch(e) {
               classmark = "";
          }

          if (classmark !== "") {
               return classmark;
          } else {
               return false;
          }

     }

	 // Change the wording depending on whether an item is available

     vm.getAvailability  = getAvailability;

     function getAvailability($scope) {

          var availability = "";

          try {
               availability = vm.parentCtrl.result.pnx.delivery.bestlocation.availabilityStatus;
          } catch(e) {
               availability = "";
          }

          if (availability !== "") {
               //return availability;
			   
			   		if (availability =='available') {
						var displayAvailability = 'Where is it shelved?';
					return displayAvailability;
					}
		
			   		if (availability =='unavailable') {
						var displayAvailability = 'Where would it be shelved?';
					return displayAvailability;
					}		
			   
          } else {
               return false;
          }

     }


// End of availability wording change

});


/**
 * Description:
 *     removes white space from text. useful for html values that cannot have spaces
 * Usage:
 *   {{some_text | nospace}}
 */
app.filter('nospace', function () {
    return function (value) {
        return (!value) ? '' : value.replace(/ /g, '');
    };
});  