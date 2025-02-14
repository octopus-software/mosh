module.exports = {
    env: {
        browser: true,
        es2021: true,
        node: true,
    },
    extends: [
        'eslint:recommended',
        'plugin:@typescript-eslint/recommended',
        'plugin:prettier/recommended', // もしPrettierも使う場合
    ],
    parser: '@typescript-eslint/parser',
    parserOptions: {
        ecmaVersion: 'latest', // 最新のECMAScript仕様を使用
        sourceType: 'module',   // ESモジュールを使用
    },
    plugins: [
        '@typescript-eslint',
    ],
    rules: {
        '@typescript-eslint/no-unused-vars': 'error', // 未使用の変数をエラーとして扱う
        '@typescript-eslint/no-explicit-any': 'warn', // any型の使用に警告を表示
        '@typescript-eslint/explicit-module-boundary-types': 'off', // 関数の戻り値の型を明示するかどうか
        'no-console': 'warn', // console.logの使用を警告
        'no-debugger': 'error', // debuggerの使用をエラーとして扱う
    },
};
