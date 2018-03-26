git add .
git commit -m "My First Commit"
git push heroku master
heroku ps:scale web=1

heroku logs
