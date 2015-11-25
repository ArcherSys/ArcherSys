using System;
using System.Collections.Generic;
using System.Linq;
using Windows.ApplicationModel;
using Windows.ApplicationModel.Activation;
using Windows.ApplicationModel.VoiceCommands;
using Windows.Storage;
using Windows.Media.SpeechRecognition;
using Windows.UI.Xaml;
using Windows.UI.Xaml.Controls;
using Windows.UI.Xaml.Navigation;

namespace ArcherSysOS.ArcherVM.Windows
{
    /// <summary>
    /// Provides application-specific behavior to supplement the default Application class.
    /// </summary>
    sealed partial class App : Application
    {
        private string app1;

        /// <summary>
        /// Initializes the singleton application object.  This is the first line of authored code
        /// executed, and as such is the logical equivalent of main() or WinMain().
        /// </summary>
        public App()
        {
            this.InitializeComponent();
            this.Suspending += OnSuspending;
        }

        /// <summary>
        /// Invoked when the application is launched normally by the end user.  Other entry points
        /// will be used such as when the application is launched to open a specific file.
        /// </summary>
        /// <param name="e">Details about the launch request and process.</param>
        protected override async void OnLaunched(LaunchActivatedEventArgs e)
        {
          

#if DEBUG
            if (System.Diagnostics.Debugger.IsAttached)
            {
                this.DebugSettings.EnableFrameRateCounter = true;
            }
#endif

            Frame rootFrame = Window.Current.Content as Frame;

            // Do not repeat app initialization when the Window already has content,
            // just ensure that the window is active
            if (rootFrame == null)
            {
                // Create a Frame to act as the navigation context and navigate to the first page
                rootFrame = new Frame();

                rootFrame.NavigationFailed += OnNavigationFailed;

                if (e.PreviousExecutionState == ApplicationExecutionState.Terminated)
                {
                    //TODO: Load state from previously suspended application
                }

                // Place the frame in the current Window
                Window.Current.Content = rootFrame;
            }

            if (rootFrame.Content == null)
            {
                // When the navigation stack isn't restored navigate to the first page,
                // configuring the new page by passing required information as a navigation
                // parameter
                rootFrame.Navigate(typeof(MainPage), e.Arguments);
            }
            try
            {
                StorageFile vcdStorageFile = await Package.Current.InstalledLocation.GetFileAsync(@"CortanaPlusPlus.xml");
                await VoiceCommandDefinitionManager.InstallCommandDefinitionsFromStorageFileAsync(vcdStorageFile);







            }
            catch (Exception ex)
            {
                System.Diagnostics.Debug.WriteLine("There was an error registering the Voice Command Definitions", ex);
            }
            // Ensure the current window is active
            Window.Current.Activate();
        }

        /// <summary>
        /// Invoked when Navigation to a certain page fails
        /// </summary>
        /// <param name="sender">The Frame which failed navigation</param>
        /// <param name="e">Details about the navigation failure</param>
        void OnNavigationFailed(object sender, NavigationFailedEventArgs e)
        {
            throw new Exception("Failed to load Page " + e.SourcePageType.FullName);
        }

        protected override async void OnActivated(IActivatedEventArgs e)
        {

            // Handle when app is launched by Cortana
            if (e.Kind == ActivationKind.VoiceCommand)
            {
                VoiceCommandActivatedEventArgs commandArgs = e as VoiceCommandActivatedEventArgs;
                SpeechRecognitionResult speechRecognitionResult = commandArgs.Result;

                string voiceCommandName = speechRecognitionResult.RulePath[0];
                string textSpoken = speechRecognitionResult.Text;
                IReadOnlyList<string> recognizedVoiceCommandPhrases;

                System.Diagnostics.Debug.WriteLine("voiceCommandName: " + voiceCommandName);
                System.Diagnostics.Debug.WriteLine("textSpoken: " + textSpoken);

                switch (voiceCommandName)
                {
                    case "openArcherVM":
                        
                        var userMessage = new VoiceCommandUserMessage();
                        if( speechRecognitionResult.SemanticInterpretation.Properties.TryGetValue("app", out recognizedVoiceCommandPhrases))
                        {
                          app1 = recognizedVoiceCommandPhrases.First();
                        }
                    userMessage.DisplayMessage = "Here's your web app.";
                        userMessage.SpokenMessage = "Let me get Malaika to open up " + app1 + " for you.";
                        VoiceCommandResponse vcr = VoiceCommandResponse.CreateResponse(userMessage);
                        System.Diagnostics.Debug.WriteLine(vcr.Message.DisplayMessage);
                        
                       
                        break;
                    case "askMalaika":
                        
                        break;
                }
            }
        }
        /// <summary>
        /// Invoked when application execution is being suspended.  Application state is saved
        /// without knowing whether the application will be terminated or resumed with the contents
        /// of memory still intact.
        /// </summary>
        /// <param name="sender">The source of the suspend request.</param>
        /// <param name="e">Details about the suspend request.</param>
        private void OnSuspending(object sender, SuspendingEventArgs e)
        {
            var deferral = e.SuspendingOperation.GetDeferral();
            //TODO: Save application state and stop any background activity
            deferral.Complete();
        }
    }
}
