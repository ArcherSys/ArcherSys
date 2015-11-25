using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ArcherSysOS.WUI
{
    interface Browsable
    {
      
          void head(Action onDefine);
         void body(Action onCreate);
    }
}
