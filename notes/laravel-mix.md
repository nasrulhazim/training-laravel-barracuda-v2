## Laravel Mix

- [x] Laravel Mix (Compiling Assets)
	- [x] NodeJS
	- [x] NPM
	- [x] npm run dev
	- [x] npm run prod
	- [x] npm run watch
	- [x] Adding font awesome, refer blog.
	
### General workflow adding front-end package

```
npm i vendor-name/package-name --save-dev
add in resources/assets
	require('package-name')
	...
update webpack.mix.js
npm run dev / npm run prod
```