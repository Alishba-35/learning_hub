function runCode() {
      const userCode = document.getElementById('code-editor').value;
      const outputDiv = document.getElementById('output');

      // Clear previous output
      outputDiv.textContent = '';

      // Custom console.log to capture outputs
      const originalLog = console.log;
      console.log = function (...args) {
        outputDiv.textContent += args.join(' ') + '\n';
        originalLog.apply(console, args);
      };

      try {
        // Safely execute the code
        new Function(userCode)();
      } catch (error) {
        outputDiv.textContent += 'Error: ' + error.message + '\n';
      }

      // Restore console.log
      console.log = originalLog;
    }


    // varibles and data type
    function runCode_var() {
  const userCode = document.getElementById('code-editor').value;
  const outputDiv = document.getElementById('output');
  outputDiv.textContent = '';
  outputDiv.classList.remove('error');

  const originalLog = console.log;
  console.log = function (...args) {
    outputDiv.textContent += args.join(' ') + '\n';
    originalLog.apply(console, args);
  };

  try {
    new Function(userCode)();
  } catch (error) {
    outputDiv.textContent += 'Error: ' + error.message + '\n';
    outputDiv.classList.add('error');
  }

  console.log = originalLog;
}
  // conditional statement nd operator
   
    function printTable(rows) {
      return rows.map(([k,v]) => `${k} => ${v}`).join("\n");
    }
    function setOut(id, text) {
      const el = document.getElementById(id);
      el.textContent = String(text);
    }
    function clearOut(id) { setOut(id, ""); }

    // Demos
    function runArithmetic() {
      let x = 10, y = 5;
      const post = (()=>{ let t = x; x++; return `${t} → ${x}`; })();
      let y2 = y; const pre = (++y2).toString();
      const rows = [
        ["x + y", 10 + 5],
        ["x - y", 10 - 5],
        ["x * y", 10 * 5],
        ["x / y", 10 / 5],
        ["x % y", 10 % 5],
        ["x ** 2", 10 ** 2],
        ["x++ (post)", post],
        ["++y (pre)", pre],
      ];
      setOut('out-arithmetic', printTable(rows));
    }

    function runAssignment() {
      let a = 10; let log = [];
      log.push(["a = 10", a]);
      a += 5; log.push(["a += 5", a]);
      a -= 3; log.push(["a -= 3", a]);
      a *= 2; log.push(["a *= 2", a]);
      a /= 4; log.push(["a /= 4", a]);
      a %= 5; log.push(["a %= 5", a]);
      setOut('out-assignment', printTable(log));
    }

    function runComparison() {
      let x = 10; const rows = [
        ['x == "10"', x == "10"],
        ['x === "10"', x === "10"],
        ['x != 5', x != 5],
        ['x !== 10', x !== 10],
        ['x > 5', x > 5],
        ['x <= 10', x <= 10],
      ];
      setOut('out-comparison', printTable(rows));
    }

    function runLogical() {
      let x = 10, y = 5; const rows = [
        ['x > 5 && y < 10', x > 5 && y < 10],
        ['x > 5 || y > 10', x > 5 || y > 10],
        ['!(x > 5)', !(x > 5)],
      ];
      setOut('out-logical', printTable(rows));
    }

    function runTernary() {
      const age = 18;
      const msg = (age >= 18) ? 'You are an adult' : 'You are a minor';
      setOut('out-ternary', msg);
    }

    function runTypeof() {
      const rows = [
        ['typeof 42', typeof 42],
        ["typeof 'hi'", typeof 'hi'],
        ['typeof null', typeof null + ' (quirk)'],
        ['[1,2,3] instanceof Array', [1,2,3] instanceof Array],
      ];
      setOut('out-typeof', printTable(rows));
    }

    function runNullish() {
      let user = null;
      let name = user ?? 'Guest';
      let count = 0;
      let shown = count ?? 10;
      const rows = [
        ['user ?? \"Guest\"', name],
        ['(0) ?? 10', shown],
        ['undefined ?? 99', (undefined ?? 99)],
        ['null ?? 123', (null ?? 123)],
      ];
      setOut('out-nullish', printTable(rows));
    }

    function runIfElse() {
      const val = Number(document.getElementById('score').value || 0);
      function grade(score) {
        if (score >= 90) return 'A';
        else if (score >= 75) return 'B';
        else if (score >= 60) return 'C';
        else return 'D';
      }
      const g = grade(val);
      setOut('out-ifelse', `Score ${val} → Grade ${g}`);
    }

    function runSwitch() {
      const n = Number(document.getElementById('day').value || 0);
      function dayName(n) {
        switch (n) {
          case 1: return 'Monday';
          case 2: return 'Tuesday';
          case 3: return 'Wednesday';
          case 4: return 'Thursday';
          case 5: return 'Friday';
          case 6: return 'Saturday';
          case 7: return 'Sunday';
          default: return 'Invalid';
        }
      }
      setOut('out-switch', `${n} → ${dayName(n)}`);
    }

    function runOptional() {
      const user = { profile: { name: 'Ava' } };
      const good = user?.profile?.name;
      const safe = user?.address?.street;
      const rows = [
        ['user?.profile?.name', good],
        ['user?.address?.street', String(safe)],
      ];
      setOut('out-optional', printTable(rows));
    }
