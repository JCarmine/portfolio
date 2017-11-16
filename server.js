const nodePhpAwesomeServer = require('node-php-awesome-server');

const php = nodePhpAwesomeServer({

    port: 9012,
    env: {
        'SOMEKEY': 'some value',
        'customObject': JSON.stringify({'test':0,'name':'yes'})
    },
    root: '/Users/jessecarmine/code/Portfolio/',
    ini_set: {
        max_execution_time: 280
    },
    output: {
        os: true,
        browser: true,
        device: true
    },
    clustersSet: 'auto'

});

php.on('close', () => {
    console.log('php server closed');
});

php.on('connect', () => {

    console.log('All up and running');

    //php.close();

});
