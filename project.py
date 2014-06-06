from project_module import project_object, image_object, link_object, challenge_object

p = project_object('wolfram', 'Wolfram rules')
p.domain = 'http://www.aidansean.com/'
p.path = 'wolfram'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.github_repo_name = 'wolfram'
p.mathjax = True
p.links.append(link_object(p.domain, 'wolfram', 'Live page'))
p.introduction = 'I enjoy playing with recreational mathematics and the Wolfram rules are a rich source of complex behaviour from simple rules.  So I created this project to explore how the rules can lead to different patterns.'
p.overview = '''This project allows the user to input different rules to create different patterns.  The results are displayed in an HTML table which is automatically generated.  I cannot remember the motivation for using an HTML table rather than the canvas, as there are obvious disadvantages to using a table, even if it does arrange the results in a semantic manner.'''

p.challenges.append(challenge_object('The interface has to be relatively intuitive.', 'Although the interface is simple, I am not satisfied that it is intuitive enough for someone new to Wolfram rules.  This may need to be revisited, with some example rules explained to show how the game works.', 'Resolved, to be revisited'))
