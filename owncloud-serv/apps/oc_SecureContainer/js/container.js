/**
 * Copyright (c) 2014, Lukas Zurschmiede, http://ranta.ch
 *
 * This file is licensed under the Affero General Public License version 3
 * or later.
 *
 * See the COPYING-README file.
 *
 */

/**
 * Utility class for secure_container related navigation operations
 * 
 * TODO: Add a possibility to reenter the passphrase and verify it.
 * TODO: Maybe an option to change the passphrase?
 */
(function ($, OC) {
	'use strict'

	if (!OCA.SecureContainer) {
		OCA.SecureContainer = {};
	};
	
	var Container = function($el) {
		this.initialize($el);
	};
	
	Container.prototype = {
		/**
		 * The current selected entry ID
		 */
		_activeItem: null,
		
		/**
		 * Current passphraseto use for decryption.
		 */
		_activePassphrase: null,
 
		/**
		 * The main navigation container
		 */
		$el: null,
 
		/**
		 * The current dialog id which holds the encrypted data.
		 */
		_decryptDialogId: -1,

		/**
		 * Initializes the navigation from the given container
		 * 
		 * @param $el element containing the navigation
		 */
		initialize: function($el) {
			this.$el = $el;
			this._activePassphrase = null;
			this._setupEvents();
		},

		/**
		 * Adds an event handler
		 *
		 * @param string eventName event name
		 * @param Function callback
		 */
		on: function(eventName, callback) {
			this.$el.on(eventName, callback);
		},

		/**
		 * Removes an event handler
		 *
		 * @param string eventName event name
		 * @param Function callback
		 */
		off: function(eventName, callback) {
			this.$el.off(eventName, callback);
		},

		/**
		 * Triggers an event for all subscribers
		 * 
		 * @param string eventName event name
		 * @param Object data Event data
		 */
		trigger: function(eventName, data) {
			this.$el.trigger(new $.Event(eventName, { eventData: data }));
		},

		/**
		 * Setup UI events
		 */
		_setupEvents: function() {
			// Events for replace and update content entries
			this.on('replace', _.bind(this._replaceContent, this));
			this.on('insert', _.bind(this._insertContent, this));
			
			this.on('openPassphraseDialog', _.bind(this._showPassphraseDialog, this))
			this.on('clearPassphrase', _.bind(function() {
				this._activePassphrase = null;
				this.trigger('passphraseUnset', null);
			}, this));
			
			this.on('clear', _.bind(function() {
				this.$el.empty();
			}, this));
			
			this.on('delete', _.bind(function(ev) {
				ev.stopImmediatePropagation();
				$('#entry-' + ev.eventData.guid).remove();
			}, this));
		},
 
		/**
		 * Inserting all content from the event data on the bottom of the container
		 * 
		 * @param Object ev The triggered Event
		 */
		_insertContent: function(ev) {
			// If we create a new entity, we get it back as the 
			$.each(ev.eventData, _.bind(function(k, entry) {
				// Create the entry
				var $entry = $('<section class="secure-entry secure-zebra-' + (k%2 ? 'even' : 'odd') + '" id="entry-' + entry.id + '"></section>');
				var $name = $('<div class="secure-entry-name">' + ((entry.name === null) || (entry.name === '') ? t('secure_container', 'Name not set') : entry.name) + '</div>');
				var $description = $('<div class="secure-entry-description">' + ((entry.description === null) || (entry.description === '') ? '...' : entry.description) + '</div>');
				var $functions = $('<nav class="secure-entry-functions"></nav>');
				
				$functions.append($('<div class="secure-entry-function secure-entry-decrypt icon-password svg">' + t('secure_container', 'Decrypt') + '</div>'));
				$functions.append($('<div class="secure-entry-function secure-entry-delete icon-delete svg">' + t('secure_container', 'Delete') + '</div>'));
				
				$entry.data('name', (entry.name === null ? '': entry.name));
				$entry.data('description', (entry.description === null ? '' : entry.description));
				$entry.data('encrypted', (entry.value === null ? '' : entry.value));
				$entry.append($name).append($description).append($functions);
				this.$el.append($entry);
				
				// Bind events to edit and show the decrypted value
				$entry.on('click', '.secure-entry-name', _.bind(this._onClickName, this));
				$entry.on('click', '.secure-entry-description', _.bind(this._onClickDescription, this));
				$entry.on('click', '.secure-entry-decrypt', _.bind(this._onClickDecrypt, this));
				$entry.on('click', '.secure-entry-delete', _.bind(this._onClickDelete, this));
			}, this));
		},
 
		/**
		 * Replaces one content which is identified by the id dataproperty
		 * 
		 * @param Object ev The triggered Event
		 */
		_replaceContent: function(ev) {
			if (ev.eventData.id !== undefined) {
				var $base = $('#entry-' + ev.eventData.id);
				
				if (ev.eventData.name !== undefined) {
					$('.secure-entry-name', $base).text(ev.eventData.name);
					$base.data('name', ev.eventData.name);
				}
				if (ev.eventData.description !== undefined) {
					$('.secure-entry-description', $base).text(ev.eventData.description);
					$base.data('description', ev.eventData.description);
				}
				if (ev.eventData.value !== undefined) {
					$base.data('value', ev.eventData.value);
				}
				
				// See below: Opacity is decreased when save some data
				$base.animate({
					opacity: 1
				}, 500);
			}
		},
 
		/**
		 * Delete the currently selected entry after a request if this is wanted
		 * 
		 * @param Object ev The triggered Event
		 */
		_onClickDelete: function(ev) {
			var $target = $(ev.currentTarget);
			this._activeItem = $target.parent().parent();
			
			var $dialog = OC.dialogs.confirm(t('secure_container', 'You really want delete this entry?'), t('secure_container', 'Delete selected Entry?'), _.bind(function(ok, value) {
				if (ok) {
					this.trigger('deleteContent', {
						id: this._activeItem.attr('id').replace(/entry\-/, '')
					});
					this._activeItem = null;
				}
			}, this), true);
		},

		/**
		 * Event handler for when clicking on a name to show an edit field.
		 * 
		 * @param Object ev The triggered Event
		 */
		_onClickName: function(ev) {
			var $target = $(ev.currentTarget);
			this._activeItem = $target.parent();
			var $edit = $('<input type="text" />').val(this._activeItem.data('name'));
			
			$target.empty().append($edit);
			$edit.on({
				blur: _.bind(function(ev) {
					ev.stopImmediatePropagation();
					this._activeItem.data('name', $edit.val());
					$target.empty().text(this._activeItem.data('name'));
					this._saveEncrypted();
				}, this),
				keydown: _.bind(function(ev) {
					if (ev.which == 13) {
						ev.stopImmediatePropagation();
						this._activeItem.data('name', $edit.val());
						$target.empty().text(this._activeItem.data('name'));
						this._saveEncrypted();
					}
				}, this),
				click: function(ev) {
					ev.stopImmediatePropagation();
				},
			});
			$edit.focus();
		},

		/**
		 * Event handler for when clicking on a description to show an edit field
		 * 
		 * @param Object ev The triggered Event
		 */
		_onClickDescription: function(ev) {
			var $target = $(ev.currentTarget);
			this._activeItem = $target.parent();
			var $edit = $('<textarea style="width:auto;height:auto;" />').val(this._activeItem.data('description'));
			
			$target.empty().append($edit);
			$edit.on({
				blur: _.bind(function(ev) {
					ev.stopImmediatePropagation();
					this._activeItem.data('description', $edit.val());
					$target.empty().text(this._activeItem.data('description'));
					this._saveEncrypted();
				}, this),
				click: function(ev) {
					ev.stopImmediatePropagation();
				}
			});
			$edit.focus();
		},

		/**
		 * Event handler for when clicking on the decrypt icon
		 * 
		 * @param Object ev The triggered Event
		 */
		_onClickDecrypt: function(ev) {
			var $target = $(ev.currentTarget), html = $('<div class="secure-container-encrypted">' + "\u066D".repeat(10) + '</div>');
			this._activeItem = $target.parent().parent();
			
			// Open an ocdialog-widget and binds the _closeDialog as the "ok" handler
			var $dialog = OC.dialogs.message(html, t('secure_container', 'Encrypted text'), 'info', OCdialogs.OK_BUTTON, _.bind(this._saveEncrypted, this), true);
			
			// This is triggered when the dialog is shown.
			// Replaces the content with markup and bind to the close event
			$dialog.done(_.bind(function() {
				this._decryptDialogId = OCdialogs.dialogsCounter - 1;
				var $content = $('#oc-dialog-' + this._decryptDialogId + '-content');
				$content.width('auto');
				$content.empty().append(html);
				
				// Show the decrypted text
				$content.on('click', '.secure-container-encrypted', _.bind(this._encryptDecryptDialogValue, this));
				
				// Remove all dialog code after closing
				$content.on('ocdialogclose', _.bind(this._closeDialog, this));
			}, this));
		},

		/**
		 * Encrypt and Decrypt the text from the dialog
		 * Only decrypt the encrypted value if decrypt is an Event, not set or true
		 * 
		 * @param Event|boolean decrypt If true or an event, the alue is decrypted
		 */
		_encryptDecryptDialogValue: function(decrypt) {
			var $target = $('.secure-container-encrypted'), value;
			var decrypt = (decrypt == undefined) || ((typeof(decrypt) == 'object') && (decrypt.originalEvent) && (decrypt.originalEvent instanceof Event)) || (typeof(decrypt) == 'boolean' && decrypt);
			
			try {
				if ($target.hasClass('decrypted')) {
					value = $target.find('textarea').val();
					value = this._encryptText(value);
					this._activeItem.data('encrypted', value);
					$target.removeClass('decrypted');
					$target.empty();
					$target.text("\u066D".repeat(10));
				}
				else if (decrypt) {
					value = this._activeItem.data('encrypted');
					value = this._decryptText(value);
					$target.addClass('decrypted');
					$target.empty();
					$target.append($('<textarea style="width:auto;height:auto;" />'));
					
					// Set the value and prevent defaults to not resize the textarea or close the dialog
					$target.find('textarea').val(value).focus().on({
						click: function(ev) {
							ev.stopImmediatePropagation();
							$target.resize();
						},
						keydown: function(ev) {
							if (ev.which == 13) {
								ev.stopImmediatePropagation();
							}
						}
					});
				}
			} catch (e) {
				// see "e.deffered" for jQuery.deffered
			}
		},

		/**
		 * Encrypt the given text with a global passphrase
		 * 
		 * @param string text Text to encrypt
		 * 
		 * @return string
		 */
		_encryptText: function(text) {
			// If there is no passphrase set, we open up a dialog and throw an exception
			if (this._activePassphrase == null) {
				throw new this.PassphraseDialogOpenedException( this._showPassphraseDialog() );
			}
			return OC_SJCL.sjcl.encrypt(this._activePassphrase, text);
		},

		/**
		 * Decrypt the given text with a global passphrase
		 * 
		 * @param string text Text to decrypt
		 * 
		 * @return string
		 */
		_decryptText: function(text) {
			// If there is no passphrase set, we open up a dialog and throw an exception
			if (this._activePassphrase == null) {
				throw new this.PassphraseDialogOpenedException( this._showPassphraseDialog() );
			}
			try {
				return OC_SJCL.sjcl.decrypt(this._activePassphrase, text);
			} catch(e) {
				if (e.message.substring(0, 11) == 'json decode') {
					return '';
				}
				if (e.message.substring(0, 22) == 'ccm: tag doesn\'t match') {
					throw new this.PassphraseDialogOpenedException( this._showPassphraseDialog() );
				}
			}
		},
 
		/**
		 * Opens a passphrase dialog and returns the deffered object
		 * 
		 * @return Deffered
		 */
		_showPassphraseDialog: function() {
			return OC.dialogs.prompt(t('secure_container', 'There is currently no passphrase set for the en- and decryption.'), t('secure_container', 'En-/Decryption Passphrase'), _.bind(function(ok, value) {
				if (ok) {
					this._activePassphrase = value;
					this.trigger('passphraseSet', null);
				}
			}, this), true, t('secure_container', 'Passphrase'), true);
		},

		/**
		 * Simple function used to throw an exception when the Passphrase dialog is opened.
		 * 
		 * @param Deffered deffered The Dialogs deffered object.
		 */
		PassphraseDialogOpenedException: function(deffered) {
			this.deffered = deffered;
			this.message = t('secure_container', 'Passphrase Dialog opened. Enter the Passphrase and redo the action again.');
		},

		/**
		 * Saves the encrypted value from the current entry and closes the dialog
		 */
		_saveEncrypted: function() {
			this._encryptDecryptDialogValue(false);
			
			this.trigger('saveContent', {
				name: this._activeItem.data('name'),
				description: this._activeItem.data('description'),
				value: this._activeItem.data('encrypted'),
				id: this._activeItem.attr('id').replace(/entry\-/, '')
			});
			
			this._activeItem.css({ opacity: 0.25 });
			this._closeDialog();
		},

		/**
		 * Close and destroy the dialog
		 */
		_closeDialog: function() {
			var $target = $('#oc-dialog-' + this._decryptDialogId + '-content');
			$target.ocdialog('destroy');
			$target.remove();
			this._decryptDialogId = -1;
			this._activeItem = null;
		},

		last: null
	};
	
	OCA.SecureContainer.Container = Container;
})(jQuery, OC);
