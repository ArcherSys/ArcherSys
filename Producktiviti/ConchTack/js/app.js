(function ($) {
   
   var  contacts = [{
        name: "Contact 1",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "family"
    }, {
        name: "Contact 2",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "family"
    }, {
        name: "Contact 3",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "friend"
    }, {
        name: "Contact 4",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "colleague"
    }, {
        name: "Contact 5",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "family"
    }, {
        name: "Contact 6",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "colleague"
    }, {
        name: "Contact 7",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "friend"
    }, {
        name: "Contact 8",
        address: "1, a street, a town, a city, AB12 3CD",
        tel: "0123456789",
        email: "anemail@me.com",
        type: "family"
    }];

    /** Contact Model Lets You record your social
     * your very own database.
     * @constructor
     * There are no params.
     */
  var   Contact = Backbone.Model.extend({
        defaults: {
            photo: "img/placeholder.png",
            name: "",
            address: "",
            tel: "",
            email: "",
            type: ""
        }
    });

    /** ConchTack Directory Collection
     *  To be placed in parse
     * @constructor
     *
     */
    var Directory = Backbone.Collection.extend({
        model: Contact
    });

    /** define individual contact view
     * Parse Ready
     */
    var ContactView = Backbone.View.extend({
        tagName: "article",
        className: "contact-container",
        template: _.template($("#contactTemplate").html()),
        editTemplate: _.template($("#contactEditTemplate").html()),

        render: function() {
            this.$el.html(this.template(this.model.toJSON()));
            return this;
        },

        events: {
            "click core-icon-button.delete": "deleteContact",
            "click core-icon-button.edit": "editContact",
            "change select.type": "addType",
            "click core-icon-button.save": "saveEdits",
            "click core-icon-button.cancel": "cancelEdit"
        },

        /** deletes a contact */
        deleteContact: function() {
            var removedType = this.model.get("type").toLowerCase();

            //remove model
            this.model.destroy();

            //remove view from page
            this.remove();

            //re-render select if no more of deleted type
            if (_.indexOf(directory.getTypes(), removedType) === -1) {
                directory.$el.find("#filter select").children("[value='" + removedType + "']").remove();
            }
        },

        /** switches contact to edit mode
         * @function
         */
        editContact: function() {
            this.$el.html(this.editTemplate(this.model.toJSON()));

            //add select to set type
            var newOpt = $("<option/>", {
                html: "<em>Add new...</em>",
                value: "addType"
            });

            this.select = directory.createSelect().addClass("type").val(this.$el.find("#type").val()).append(newOpt).insertAfter(this.$el.find(".name"));
            this.$el.find("input[type='hidden']").remove();
        },

        addType: function() {
            if (this.select.val() === "addType") {

                this.select.remove();

                $("<input />", {
                    "class": "type"
                }).insertAfter(this.$el.find(".name")).focus();
            }
        },

        saveEdits: function(e) {
            e.preventDefault();

            var formData = {},
            prev = this.model.previousAttributes();

            //get form data
            $(e.target).closest("form").find(":input").not("button").each(function() {
                var el = $(this);
                formData[el.attr("class")] = el.val();
            });

            //use default photo if none supplied
            if (formData.photo === "") {
                delete formData.photo;
            }

            //update model
            this.model.set(formData);

            //render view
            this.render();

            //if model acquired default photo property, remove it
            if (prev.photo === "img/placeholder.png") {
                delete prev.photo;
            }

            //update contacts array
            _.each(contacts, function(contact) {
                if (_.isEqual(contact, prev)) {
                    contacts.splice(_.indexOf(contacts, contact), 1, formData);
                }
            });
        },

        cancelEdit: function() {
            this.render();
        }
    });

    /** define master view */
   var  DirectoryView = Backbone.View.extend({
        el: $("#contacts"),

        initialize: function() {
            this.collection = new Directory(contacts);

            this.render();
            this.$el.find("#filter").append(this.createSelect());

            this.on("change:filterType", this.filterByType, this);
            this.collection.on("reset", this.render, this);
            this.collection.on("add", this.renderContact, this);
            this.collection.on("remove", this.removeContact, this);
        },

        render: function() {
            this.$el.find("article").remove();

            _.each(this.collection.models, function(item) {
                this.renderContact(item);
            }, this);
        },

        renderContact: function(item) {
            var contactView = new ContactView({
                model: item
            });
            this.$el.append(contactView.render().el);
        },

        getTypes: function() {
            return _.uniq(this.collection.pluck("type"), false, function(type) {
                return type.toLowerCase();
            });
        },

        createSelect: function() {
            var filter = this.$el.find("#filter"),
                select = $("<select/>", {
                    html: "<option value='all'>All</option>"
                });

            _.each(this.getTypes(), function(item) {
                var option = $("<option/>", {
                    value: item.toLowerCase(),
                    text: item.toLowerCase()
                }).appendTo(select);
            });

            return select;
        },

        //add ui events
        events: {
            "change #filter select": "setFilter",
            "click #add": "addContact",
            "click #showForm": "showForm"
        },

        //Set filter property and fire change event
        setFilter: function(e) {
            this.filterType = e.currentTarget.value;
            this.trigger("change:filterType");
        },

        //filter the view
        filterByType: function() {
            if (this.filterType === "all") {
                this.collection.reset(contacts);
                contactsRouter.navigate("filter/all");
            }
            else {
                this.collection.reset(contacts, {
                    silent: true
                });

                var filterType = this.filterType,
                    filtered = _.filter(this.collection.models, function(item) {
                        return item.get("type").toLowerCase() === filterType;
                    });

                this.collection.reset(filtered);

                contactsRouter.navigate("filter/" + filterType);
            }
        },

        //add a new contact
        addContact: function(e) {
            e.preventDefault();

            var formData = {};
            $("#addContact").children("input").each(function(i, el) {
                if ($(el).val() !== "") {
                    formData[el.id] = $(el).val();
                }
            });

            //update data store
            contacts.push(formData);

            //re-render select if new type is unknown
            if (_.indexOf(this.getTypes(), formData.type) === -1) {
                this.collection.add(new Contact(formData));
                this.$el.find("#filter").find("select").remove().end().append(this.createSelect());
            }
            else {
                this.collection.add(new Contact(formData));
            }
        },

        removeContact: function(removedModel) {
            var removed = removedModel.attributes;

            //if model acquired default photo property, remove it
            if (removed.photo === "img/placeholder.png") {
                delete removed.photo;
            }

            //remove from contacts array
            _.each(contacts, function(contact) {
                if (_.isEqual(contact, removed)) {
                    contacts.splice(_.indexOf(contacts, contact), 1);
                }
            });
        },

        showForm: function() {
            this.$el.find("#addContact").slideToggle();
        }
    });

    /** Router adds routing
     * @constructor
     */
    var ContactsRouter = Backbone.Router.extend({
        routes: {
            "filter/:type": "urlFilter"
        },

        urlFilter: function(type) {
            directory.filterType = type;
            directory.trigger("change:filterType");
        }
    });

    //create instance of master view
    var directory = new DirectoryView();

    //create router instance
   var  contactsRouter = new ContactsRouter();

    //start history service
    Backbone.history.start();
}(jQuery));