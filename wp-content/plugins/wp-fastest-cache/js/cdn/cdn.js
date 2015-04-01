var WpfcCDN = {
	id : "",
	template_url : "",
	content : "",
	set_id: function(obj){
		this.id = obj.id.replace("wpfc-int-item-", "");
	},
	set_template_url: function(obj){
		this.template_url = obj.template_main_url + "/" + this.id + ".html";
	},
	open_wizard: function(){
		var self = this;
		self.load_template(function(){
			jQuery("#wpfc-" + self.id + "-modal").draggable();
			jQuery("#wpfc-" + self.id + "-modal").position({my: "center", at: "center", of: window});
			self.set_close_event();
			self.buttons();
		});
	},
	buttons: function(){
		var self = this;
		var action = "";
		var current_page, next_page;

		jQuery("button[wpfc-cdn-modal-button]").click(function(e){
			action = jQuery(e.target).attr("wpfc-cdn-modal-button");
			current_page = jQuery("#wpfc-maxcdn-wizard div.wiz-cont:visible");
			next_page = current_page.next();
			prev_page = current_page.prev();

			if(action == "next"){
				if(next_page.length){
					current_page.hide();
					current_page.next().show();
					self.show_button("back");
				}
			}else if(action == "back"){
				if(prev_page.length){
					current_page.hide();
					current_page.prev().show();
					self.show_button("next");

					if(prev_page.attr("wpfc-cdn-page") == 1){
						self.hide_button("back");
					}
				}
			}
		});
	},
	hide_button: function(type){
		jQuery("button[wpfc-cdn-modal-button='" + type + "']").hide();
	},
	show_button: function(type){
		jQuery("button[wpfc-cdn-modal-button='" + type + "']").show();
	},
	set_close_event: function(){
		var self = this;
		jQuery(".close-wiz").click(function(){
			jQuery("#wpfc-" + self.id + "-modal").hide();
		});
	},
	load_template: function(callbak){
		var self = this;
		jQuery.get(self.template_url, function( data ) {
			jQuery("body").append(data);
			callbak();
		});
	}
};