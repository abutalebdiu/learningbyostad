-- Answer: A
SELECT DISTINCT salary
FROM employee
ORDER BY salary
LIMIT 1 OFFSET 2;


-- Answer: B

SELECT MIN(salary) AS second_lowest_salary
FROM employee
WHERE salary > (
    SELECT MIN(salary)
    FROM employee
);

-- Answer: C

SELECT OPEN_BRANCH_ID, AVG(PENDING_BALANCE) AS avg_pending_balance
FROM account
WHERE STATUS = 'active'
GROUP BY OPEN_BRANCH_ID
HAVING AVG(PENDING_BALANCE) < 4300;

-- Answer: D

SELECT *
FROM employee
ORDER BY employee_id
LIMIT 10 OFFSET 20;

-- Answer: E

SELECT COUNT(DISTINCT OPEN_BRANCH_ID) AS total_branches
FROM account;
