#This simple script is meant to automate the process of pushing to git and
#deploying to dev server.
#What it does should be simple to check out :)


#0 for local, 1 for dev
mode=0

if [ $# -eq 0 ]
  then
    echo "Commit message must be supplied (1st arg)"
    exit 1
fi



BRANCH=$(git rev-parse --abbrev-ref HEAD)

if [ "$BRANCH" = "master" ] 
then
  echo "Cannot push to master, exiting.";
  exit 1;
fi



git commit -m "$1"

git push origin $BRANCH

if [ "$mode" = 1 ] 
then
   #no longer point hbsitetest to localhost
   sudo sed -i '/127.0.0.1 www.hbsitetest.com/c\#127.0.0.1 www.hbsitetest.com' /etc/hosts
   xdg-open "http://www.mcdev1.com/deploy.php?branch=$BRANCH"
elif [ "$mode" = 0 ]
then
  echo "";
  #point hbsitetest to localhost
  #sudo sed -i '/#127.0.0.1 www.hbsitetest.com/c\127.0.0.1 www.hbsitetest.com' /etc/hosts
fi




