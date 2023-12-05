version=1.0.2

generate:
	$(MAKE) -C ./modules/php-client-generator/ generate-php-client service=product-configurator version=${version}
push:
	bash git_push.sh
publish:
	#GOPROXY=proxy.golang.org go list -m github.com/Gemini-Commerce/php-client-product-confgiurator@v${version}