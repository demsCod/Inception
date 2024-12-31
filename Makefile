all: start

start:
	mkdir -p /home/dems/data/mariadb_data
	mkdir -p /home/dems/data/wordpress_data
	docker compose --project-directory srcs up --build

stop:
	docker compose --project-directory srcs down

delete:
	 sudo rm -rf /home/dems/data/*

supp:
	docker container rm -f mariadb
	docker container rm -f wordpress
	docker container rm -f nginx
	docker system prune -af


clean : stop delete supp

logs:
	docker compose --project-directory srcs logs

.PHONY: start all logs delete supp