module.exports = {
  preset: '@vue/cli-plugin-unit-jest/presets/no-babel',
  cache: false,
  // roots: [
  //   '<rootDir>/resources/js/tests/unit'
  // ],
  // vue: transform vue with vue-jest to make jest understand vue's syntax
  // js: transform js files with babel, we can now use import statements in tests
  // transform: {
  //   '.*\\.(vue)$': '<rootDir>/node_modules/vue-jest',
  //   '^.+\\.js$': '<rootDir>/node_modules/babel-jest'
  // },
  // transformIgnorePatterns: [
  //   '<rootDir>/node_modules/(?I@vue)'
  // ],
  // (optional) with that you can import your components like
  // import Counter from '@/Counter. vue*
  // (no need for a full path)
  // moduleNameMapper: {
  //   'A@/(.*)$': '<rootDir>/resources/js/$1'
  // },
  testMatch: [
    '**/tests/**/*.spec.(js|jsx|ts|tsx)|**/__tests__/*.(js|jsx|ts|tsx)'
  ],
}

