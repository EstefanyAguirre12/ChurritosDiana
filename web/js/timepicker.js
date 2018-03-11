
window.onload = function() {

	function timePicker() {}

	timePicker.prototype = {

		bindEvent: function(el, callback, eventName) {
			for (var i = 0; i < el.length; i++) {
				el[i].addEventListener(eventName, callback, false);
			}
		},

		setupTime: function() {
			var hours = document.querySelectorAll('.analog--hour');
			var minutes = document.querySelectorAll('.analog--minute');
			
			var updateHours = function(evt) {
				var hours = evt.target.innerHTML;
				var superHour = document.querySelector('.hours');
				var mainHour = document.querySelectorAll('.hours')[1];
				superHour.innerHTML = hours;
				mainHour.innerHTML = hours;
				active(evt.target);
			};

			var updateMinutes = function(evt) {
				var minutes = evt.target.innerHTML;
				var superMinutes = document.querySelector('.minutes');
				var mainMinutes = document.querySelectorAll('.minutes')[1];
				superMinutes.innerHTML = minutes;
				mainMinutes.innerHTML = minutes;
				active(evt.target);
			};

			var active = function(el) {
				console.log(el);
			};

			this.bindEvent(minutes, updateMinutes, 'click');
			this.bindEvent(hours, updateHours, 'click');
		},

		setupPeriod: function() {
			var period = document.querySelectorAll('.digital--period');
			var am = document.querySelectorAll('.digital--period')[0];
			var pm = document.querySelectorAll('.digital--period')[1];

			var updatePeriod = function(evt) {
				var period = evt.target.innerHTML;

				if (period === 'am') {
					am.className = 'digital--period light';
					pm.className = 'digital--period ultra-light';
				} else {
					am.className = 'digital--period ultra-light';
					pm.className = 'digital--period light';
				}

				document.querySelector('.period').innerHTML = period;
			};

			this.bindEvent(period, updatePeriod, 'click');
		},

		handleFormState: function() {
			var number = document.querySelectorAll('.analog--hours');

			var setActive = function(evt) {
				var number = evt.target;
				var timePicker = document.querySelector('.time-picker');
				timePicker.className = 'time-picker minutes-state';
			};

			this.bindEvent(number, setActive, 'click');
		},

		handleTimeState: function() {
			var number = document.querySelectorAll('span[data-deg]');
			hand = document.querySelectorAll('.analog--hand');

			var setHourState = function(evt) {
				var el = evt.target;
				var deg = el.dataset.deg;
				var elClass = el.className;
				hand[0].className = 'analog--hand ' + deg;
			};

			var setMintueState = function(evt) {
				var el = evt.target;
				var deg = el.dataset.deg;
				var elClass = el.className;
				hand[1].className = 'analog--hand ' + deg;
			};

			this.bindEvent(number, setHourState, 'mouseenter');
			this.bindEvent(number, setMintueState, 'mouseenter');
		},

		init: function() {
			this.setupTime();
			this.setupPeriod();
			this.handleFormState();
			this.handleTimeState();
		}
	}

	var timePicker = new timePicker();
	timePicker.init();

}