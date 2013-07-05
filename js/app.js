function Job {

}
function AppViewModel() {
	var self = this;

	self.jobID = ko.observable("Job 248");
	self.patron = ko.observable("Jeff");

}

ko.applyBindings(new AppViewModel());
