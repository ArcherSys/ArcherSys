using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Windows.ApplicationModel.AppService;
using Windows.ApplicationModel.Background;
using Windows.ApplicationModel.VoiceCommands;

namespace ArcherSysOS.CortanaPlus.VoiceCommands
{
    public sealed class CortanaPlusPlus : IBackgroundTask
    {
        private VoiceCommandServiceConnection voiceServiceConnection;

        public async void Run(IBackgroundTaskInstance taskInstance)
        {
            BackgroundTaskDeferral _defferal = taskInstance.GetDeferral();

            taskInstance.Canceled += OnTaskCanceled;

            var triggerDetals = taskInstance.TriggerDetails as AppServiceTriggerDetails;
            if (triggerDetals != null && triggerDetals.Name == "ArcherVM.CortanaPlusEndpoint")
            {
                try
                {
                    voiceServiceConnection = VoiceCommandServiceConnection.FromAppServiceTriggerDetails(triggerDetals);
                    voiceServiceConnection.VoiceCommandCompleted += VoiceServiceConnection_VoiceCommandCompleted;
                    VoiceCommand voiceCommand = await voiceServiceConnection.GetVoiceCommandAsync();
                    switch (voiceCommand.CommandName)
                    {
                        case "openArcherVM":
                            var app = voiceCommand.Properties["App"][0];


                            var userMessage = new VoiceCommandUserMessage();
                            userMessage.DisplayMessage = "Here's your web app.";
                            userMessage.SpokenMessage = "Let me get Malaika to open up " + app + " for you.";
                            VoiceCommandResponse vcr = VoiceCommandResponse.CreateResponse(userMessage);
                            break;





                    }

                    }catch (Exception e)
                { }
            }

        }
        private void VoiceServiceConnection_VoiceCommandCompleted(VoiceCommandServiceConnection sender, VoiceCommandCompletedEventArgs args)
        {

        }

        private void OnTaskCanceled(IBackgroundTaskInstance sender, BackgroundTaskCancellationReason reason)
        {
            throw new NotImplementedException();
        }
    }

    

       
        

      
    }
