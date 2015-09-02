<<<<<<< HEAD
<<<<<<< HEAD
#!/bin/bash
#
# Shell script that creates only the main class for a new transformation
# plug-in, using a template
#
# $1: MIMEType
# $2: MIMESubtype
# $3: Transformation Name

if [ $# != 3 ]
then
  echo -e "Usage: ./generator_main_class.sh MIMEType MIMESubtype TransformationName\n"
  exit 65
fi

=======
#!/bin/bash
#
# Shell script that creates only the main class for a new transformation
# plug-in, using a template
#
# $1: MIMEType
# $2: MIMESubtype
# $3: Transformation Name

if [ $# != 3 ]
then
  echo -e "Usage: ./generator_main_class.sh MIMEType MIMESubtype TransformationName\n"
  exit 65
fi

>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
#!/bin/bash
#
# Shell script that creates only the main class for a new transformation
# plug-in, using a template
#
# $1: MIMEType
# $2: MIMESubtype
# $3: Transformation Name

if [ $# != 3 ]
then
  echo -e "Usage: ./generator_main_class.sh MIMEType MIMESubtype TransformationName\n"
  exit 65
fi

>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
./generator_plugin.sh "$1" "$2" "$3" "--generate_only_main_class"