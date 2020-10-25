build:
	docker build -t phpdocumentor/phpdoc.org/phpdoc.org .

up:
	docker run --rm -d -p 8030:80 --name phpdoc-website phpdocumentor/phpdoc.org/phpdoc.org