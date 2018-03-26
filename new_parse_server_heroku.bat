heroku create
git init
git add .
git commit -m "Initial Message"
git push heroku master
heroku addons:create mongolab:sandbox
heroku config
