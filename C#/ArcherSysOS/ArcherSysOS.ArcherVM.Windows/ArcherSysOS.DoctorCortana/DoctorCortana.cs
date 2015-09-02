using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Windows.Data.Xml.Dom;
using Windows.ApplicationModel.AppService;
using Windows.ApplicationModel.Background;
using Windows.UI.Notifications;
using Windows.ApplicationModel.VoiceCommands;

namespace ArcherSysOS.DoctorCortana
{
    public sealed class DoctorCortana : IBackgroundTask

    {
        BackgroundTaskDeferral serviceDeferral;
        public async void Run(IBackgroundTaskInstance taskInstance)
        {
            serviceDeferral = taskInstance.GetDeferral();
            taskInstance.Canceled += TaskInstance_Canceled;
            var triggerDetails = taskInstance.TriggerDetails as AppServiceTriggerDetails;
            if(triggerDetails != null && triggerDetails.Name == "DoctorCortanaEndpoint")
            {
                try
                {
                    VoiceCommandServiceConnection vsvc = VoiceCommandServiceConnection.FromAppServiceTriggerDetails(triggerDetails);
                    vsvc.VoiceCommandCompleted += Vsvc_VoiceCommandCompleted;
                    VoiceCommand vcmd = await vsvc.GetVoiceCommandAsync();
                    switch (vcmd.CommandName)
                    {
                        case "codebaseQuery":
                            VoiceCommandUserMessage successmsg = new VoiceCommandUserMessage();
                            successmsg.DisplayMessage = "Malaika says it's made of mostly PHP, CSharp, and JavaScript code.";
                            successmsg.SpokenMessage = "My friend Malaika says that Mr.Henson made ArcherSysOS out of PHP,JavaScript and C Sharp.";
                            VoiceCommandResponse vcr = VoiceCommandResponse.CreateResponse(successmsg);
                            await vsvc.ReportProgressAsync(vcr);
                            break;

                    }

                }catch(Exception e)
                {
                    VoiceCommandServiceConnection vsvc = VoiceCommandServiceConnection.FromAppServiceTriggerDetails(triggerDetails);
                    vsvc.VoiceCommandCompleted += Vsvc_VoiceCommandCompleted;
                    VoiceCommandUserMessage err = new VoiceCommandUserMessage();
                    err.DisplayMessage = e.Message;
                    err.SpokenMessage = " I'm Sorry, but I can't talk to the ArcherSysOS team right now. try again later";
                    var  errresp = VoiceCommandResponse.CreateResponse(err);
                    await vsvc.RequestAppLaunchAsync(errresp);
                    
                 
                }
            }
        }

        private void Vsvc_VoiceCommandCompleted(VoiceCommandServiceConnection sender, VoiceCommandCompletedEventArgs args)
        {
            Debug.Write("Command Completed.");
            if(this.serviceDeferral != null)
            {
                this.serviceDeferral.Complete();
            }
        }

        private void TaskInstance_Canceled(IBackgroundTaskInstance sender, BackgroundTaskCancellationReason reason)
        {
            Debug.Write("Task was canceled.");
        }
    }
}
