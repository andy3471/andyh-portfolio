module.exports = {
    "env": [
      'eslint:recommended',
      'plugin:vue/essential',
      '@vue/prettier'
    ],

    "extends": [
        "eslint:recommended",
        "plugin:vue/essential"
    ],

    "parserOptions": {
        "ecmaVersion": 12,
        "sourceType": "module"
    },

    "plugins": [
        "vue"
    ],

    "rules": {
    },

    root: true,

    env: {
      browser: true,
      es2021: true,
      node: true
    },

    parserOptions: {
      ecmaVersion: 2020,
      sourceType: 'module'
    },

    rules: {
      'no-console': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
      'no-debugger': process.env.NODE_ENV === 'production' ? 'warn' : 'off'
    }
};
