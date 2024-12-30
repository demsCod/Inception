all:
	bash -c "docker compose up -d"
clean:
	bash -c "cd srcs; docker compose down"
fclean: clean
		bash -c "docker image prune --force;"
re: fclean all