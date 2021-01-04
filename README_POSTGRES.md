# Check list database
cmd: `\l`
# Check list users
cmd: `\du`
# Alter password user
cmd: `ALTER USER postgres PASSWORD '123456';`
# Grant permissions
cmd: `grant permissions on database {database} to {user}`
# Create database
cmd: `CREATE database {database name}`
# Connect
cmd: `psql -h {host} -U postgres -p {port}`
# Connect to db
cmd: `\c {db name}`
